<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
/*### API ###*/

//Support
$route['api/backupdata']['POST'] 	= 'api/transaction/C_submit/backupData';



/*### CMS ###*/

//login
$route['control2019'] = 'LoginController';
$route['login']       = 'LoginController/login';
$route['logout']      = 'LoginController/logout';


//Dashboard
$route['dashboard'] = 'DashboardController';
$route['result'] = 'ResultController';