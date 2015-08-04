<?php 
namespace Leaf\Util;

use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;
use Leaf\Util\DateUtil;
use Leaf\Util\SchemaUtil;

class QueueUtil {
	
	public static function send ($process_name,
                          $process_no,
                          $tenant_id,
                          $parameters,
						  $properties,
						  $line_queue,
						  $user_login_id){
		
		if($process_no == null || $process_no == ''){
			$process_no = Uuid::uuid1()->toString();
		}
		
		$datetime = DateUtil::dateTimeNow();
		
		\DB::beginTransaction();
		
		try {
			\Log::info("Save to Process Message");
			// insert ke t_process_message
			$msg = new \ProcessMessage();
			$msg->process_name = $process_name;
			$msg->process_no = $process_no;
			$msg->tenant_id = $tenant_id;
			$msg->process_create_datetime = $datetime;
			$msg->process_queue_datetime = "";
			$msg->process_finish_datetime = "";
			$msg->process_status = "G";
			$msg->ref_id = -99;
			$msg->tag_id = -99;
			$msg->flg_reprocess = "N";
			$msg->prev_process_message_id = -99;
			$msg->line_queue =  $line_queue;
			
			SchemaUtil::auditCreate($msg, $datetime, $user_login_id);
			
			$msg->save();
				
			\Log::info("Save to Process Parameters");
			// insert ke t_process_parameter
// 			if(!empty($parameters) && is_array($parameters)){
// 				foreach($parameters as $key => $value){
					
// 					$param = new \ProcessParameter();
// 					$param->process_message_id = $msg->process_message_id;
// 					$param->process_parameter_key = $key;
// 					$param->process_parameter_value = $value;
// 					SchemaUtil::auditCreate($param, $datetime, $user_login_id);
// 					$param->save();
// 				}
// 			}
			$param = new \ProcessParameter();
			$param->process_message_id = $msg->process_message_id;
			$param->process_parameter_key = "data";
			$param->process_parameter_value = json_encode($parameters);
			SchemaUtil::auditCreate($param, $datetime, $user_login_id);
			$param->save();
			
			\DB::commit();
			$send = true; // flag to send queue
			
		}catch(Exception $ex){
			\DB::rollback();
			\Log::error($ex->getMessage());
			$send = false; // flag not to send queue
		}
		
		if($send){
			\Log::info("Send to Queue");
				
			// Send to Queue using Stomp
			$stomp = new \Stomp(\Config::get('constants.QUEUE_URL'));
				
			$properties = array_merge($properties,[
				"processName" => $process_name,
				"processNo" => $process_no,
				"tenantId" => $tenant_id
			]);
			
			$stomp->send($line_queue, json_encode($parameters), $properties);
				
			\Log::info("Sent!");
				
			unset($stomp);
		}
	}
}