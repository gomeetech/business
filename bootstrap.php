<?php
use Core\Package;
if(class_exists('Core\Package')){
    Package::register('business', __DIR__);
}