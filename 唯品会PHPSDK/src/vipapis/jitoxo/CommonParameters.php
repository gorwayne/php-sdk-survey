<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitoxo;

class CommonParameters {
	
	static $_TSPEC;
	public $version = null;
	public $caller = null;
	public $parameterMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'version'
			),
			2 => array(
			'var' => 'caller'
			),
			3 => array(
			'var' => 'parameterMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['caller'])){
				
				$this->caller = $vals['caller'];
			}
			
			
			if (isset($vals['parameterMap'])){
				
				$this->parameterMap = $vals['parameterMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CommonParameters';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->version);
				
			}
			
			
			
			
			if ("caller" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->caller);
				
			}
			
			
			
			
			if ("parameterMap" == $schemeField){
				
				$needSkip = false;
				
				$this->parameterMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->parameterMap[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->version !== null) {
			
			$xfer += $output->writeFieldBegin('version');
			$xfer += $output->writeString($this->version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('caller');
		$xfer += $output->writeString($this->caller);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->parameterMap !== null) {
			
			$xfer += $output->writeFieldBegin('parameterMap');
			
			if (!is_array($this->parameterMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->parameterMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>