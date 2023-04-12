
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 30px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <table>
        <caption>
            <h1>Danh Sách Cầu Thủ</h1>
        </caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>CLB</th>
                <th>Ảnh</th>
            </tr>
        </thead>

        <?php
        $Danhsach = [
            "1" => [
                'ten' => 'Marco Reus',
                'ngaysinh' => '25/8/1988',
                'clb' => 'Dormundt',
                'anh' => 'https://i.bundesliga.com/player/dfl-obj-0000o3-dfl-clu-000007-dfl-sea-0001k6.png'
            ],
            "2" => [
                'ten' => 'Leo Messi',
                'ngaysinh' => '4/6/1987',
                'clb' => 'PSG',
                'anh' => 'https://vtv1.mediacdn.vn/zoom/550_339/562122370168008704/2023/3/29/photo1680130825228-16801308253471651165558.jpg'
            ]

        ];
        ?>

        <tbody>
            <?php foreach ($Danhsach as $key => $value) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo $value['ngaysinh'] ?></td>
                    <td><?php echo $value['clb'] ?></td>
                    <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body> 

</html>