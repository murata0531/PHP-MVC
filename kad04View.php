<?php

function resultView($goukei){
    
        $result_message = 'お買い上げありがとうございます<br>金額は' . number_format($goukei) . '円になります。';
    
        return $result_message;
    }