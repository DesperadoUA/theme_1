<?php
$data = [];
$data['payments'] = carbon_get_theme_option( 'payments' );
if(empty($data['payments'])) {
	$data['payments'] = [
		[ 'src' => get_template_directory_uri().'/images/master.png',
		  'alt' => 'master',
		  'title' => 'master',
            'width' => '51',
            'height' => '31'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/maestro.png',
		  'alt' => 'maestro',
		  'title' => 'maestro',
            'width' => '50',
            'height' => '31'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/citrus.png',
		  'alt' => 'citrus',
		  'title' => 'citrus',
            'width' => '49',
            'height' => '31'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/qiwi.png',
		  'alt' => 'qiwi',
		  'title' => 'qiwi',
            'width' => '58',
            'height' => '25'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/yd.png',
		  'alt' => 'yd',
		  'title' => 'yd',
            'width' => '120',
            'height' => '23'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/webmoney.png',
		  'alt' => 'webmoney',
		  'title' => 'webmoney',
            'width' => '142',
            'height' => '47'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/alfa-b.png',
		  'alt' => 'alfa-b',
		  'title' => 'alfa-b',
            'width' => '89',
            'height' => '31'
	   ],
		[ 
		  'src' => get_template_directory_uri().'/images/sberbank.png',
		  'alt' => 'sberbank',
		  'title' => 'sberbank',
            'width' => '82',
            'height' => '24'
	   ]
    ];
}
else {
    $dataDefault = [
        [ 'src' => get_template_directory_uri().'/images/master.png',
            'alt' => 'master',
            'title' => 'master',
            'width' => '51',
            'height' => '31'
        ],
        [
            'src' => get_template_directory_uri().'/images/maestro.png',
            'alt' => 'maestro',
            'title' => 'maestro',
            'width' => '50',
            'height' => '31'
        ],
        [
            'src' => get_template_directory_uri().'/images/citrus.png',
            'alt' => 'citrus',
            'title' => 'citrus',
            'width' => '49',
            'height' => '31'
        ],
        [
            'src' => get_template_directory_uri().'/images/qiwi.png',
            'alt' => 'qiwi',
            'title' => 'qiwi',
            'width' => '58',
            'height' => '25'
        ],
        [
            'src' => get_template_directory_uri().'/images/yd.png',
            'alt' => 'yd',
            'title' => 'yd',
            'width' => '120',
            'height' => '23'
        ],
        [
            'src' => get_template_directory_uri().'/images/webmoney.png',
            'alt' => 'webmoney',
            'title' => 'webmoney',
            'width' => '142',
            'height' => '47'
        ],
        [
            'src' => get_template_directory_uri().'/images/alfa-b.png',
            'alt' => 'alfa-b',
            'title' => 'alfa-b',
            'width' => '89',
            'height' => '31'
        ],
        [
            'src' => get_template_directory_uri().'/images/sberbank.png',
            'alt' => 'sberbank',
            'title' => 'sberbank',
            'width' => '82',
            'height' => '24'
        ]
    ];
    if(count($data['payments']) < 8) {
        for($i = count($data['payments'])-1; $i<count($dataDefault); $i++) {
            $data['payments'][] = $dataDefault[$i];
        }
    }
}
if(!empty($data['payments'])) {
      if(IS_AMP) include 'amp_view.php';
      else include 'view.php';
}
