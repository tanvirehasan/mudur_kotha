<?php require_once "inc/header.php" ?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">মৌমাছির খামারে পরিলক্ষিত কীটপতঙ্গ</h2>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>কীটপতঙ্গ নাম</th>
                        <th>আক্রমন করা বাক্সের সংখ্যা</th>
                        <th>লক্ষণ</th>
                        <th>সর্বোচ্চ আক্রমন মাস</th>
                        <th>সর্বনিম্ন আক্রমন মাস</th>
                    </tr>

                    <?php
                    $kitnames = array('ভারোয়া মাইট', 'ট্রপিলাইলাপস মাইট', 'শ্বাসনালীর মাইট', 'মোউচাক বিটল পোকা', 'মোমের মথ', 'ভীমরুল', 'পিঁপড়া', 'পাখি', 'অন্যান্য', 'ব্রাউলা ফ্লাই', 'কোন ধারনা নেই');
                    ?>

                    <?php
                    $i = 1;
                    foreach ($kitnames as $row) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row ?></td>
                            <td><input type="text" value="0" class="form-control"></td>
                            <td><input type="text" value="N/A" class="form-control"></td>
                            <td><input type="month" value="N/A" class="form-control"></td>
                            <td><input type="month" value="N/A" class="form-control"></td>
                        </tr>
                    <?php } ?>

                </table>
            </form>
        </div>
    </div>

</div>












<?php require_once "inc/footer.php" ?>