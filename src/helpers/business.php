<?php

use App\Repositories\Clients\ClientRepository;

if (!function_exists('get_client_select_options')) {
    /**
     * lấy danh khách hàng
     * @param array $args
     */
    function get_client_select_options(array $args = [], ...$params)
    {
        $rep = new ClientRepository();
        $pars = array_filter($args, function ($value) {
            return is_string($value) ? (strlen($value) > 0) : (is_array($value) ? (count($value) > 0) : true);
        });
        return $rep->getDataOptions($pars, ...$params);
    }
}
