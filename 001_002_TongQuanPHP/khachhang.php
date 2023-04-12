<?php
$tusach = [
    '1' => [
        'ten' => 'van hoc',
        'gia' => 12000
    ],
    '2' => [
        'ten' => 'su hoc',
        'gia' => 15000
    ]
    ];

    // $books = [
    //     'khong' => 'van',
    //     'mot' => 'su',
    //     'hai' => 'dia'
    // ];
    // foreach($books as $key => $value){
    //     echo '<br>'.$key.'-'.$value;
    // }

     //dung vong lap duyet qua mang hai chieu
    foreach($tusach as $key => $books){
        foreach($books as $k => $book){
            echo '<br>'.$k.'-'.$book;
        }
    }
    //dung vong lặp duyệt qua mãng 1 chiều
    foreach($tusach as $book) {
        echo $book['ten'].' - '.$book['gia'];
    }

    //in ra phan tu trong mang 2 chieu
    echo $tusach['1']['ten'];
    echo $tusach['2']['gia'];

    echo '<pre>';
    print_r(($tusach));
    echo '</pre>';