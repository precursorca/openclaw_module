<?php 

/**
 * openclaw class
 *
 * @package munkireport
 * @author 
 **/
class Openclaw_controller extends Module_controller
{
	    function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }
	
    /**
     * Get openclaw information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        jsonView(
            Openclaw_model::select('openclaw.*')
            ->whereSerialNumber($serial_number)
            ->filter()
            ->limit(1)
            ->first()
            ->toArray()
        );
    }

    public function get_list($column = '')
    {
        jsonView(
            Openclaw_model::select("openclaw.$column AS label")
                ->selectRaw('count(*) AS count')
                ->filter()
                ->groupBy($column)
                ->orderBy('count', 'desc')
                ->get()
                ->toArray()
        );
    }
} 
