<?php

if (!function_exists('getClassName'))
{
    function getClassName($value)
    {
		if($value != ''){
			$class = \App\Models\classes::with(['DegreeName'])->with(['BranchName'])->where('id',$value)->first();
			$class_name = preg_replace('~\b(\w)|.~', '$1',$class->BranchName->name) .'- SEM'.$class->semester.' - '.$class->class_series;
			if($class_name != '')
			{
				return $class_name;
			} else {
				return '';
			}
		} else {
			return '';
		}
		
    }
}

if (!function_exists('getSem'))
{
    function getSem($degree_id,$branch_id)
    {
		if($branch_id != ''){
			$sem = \App\Models\SemSetting::where(["degree_id"=>$degree_id,"branch_id"=>$branch_id])->get();

			if($sem != '')
			{
				foreach ($sem as $key => $value) {
					# code...
					$html[] =  '<select name="class" id="class" class="form-control">
							<option>select</option>
						</select>';
				}
				print_r($html);
			} else {
				return '';
			}

		} else {
			return '';
		}	
    }
}