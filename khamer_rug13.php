<?php require_once "inc/header.php" ?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">মৌমাছির খামারে পরিলক্ষিত রোগ</h2>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th> রোগের নাম</th>
                        <th>আক্রমন করা বাক্সের সংখ্যা</th>
                        <th>লক্ষণ</th>
                        <th>সর্বোচ্চ আক্রমন মাস</th>
                        <th>সর্বনিম্ন আক্রমন মাস</th>
                    </tr>

                    <?php
                    $kitnames = array('ইউরোপীয় ফাউল ব্রুড ', ' আমেরিকান ফাউল ব্রুড', 'থলি ব্রুড', 'চক ব্রুড', 'নসেমা', 'আমাশয়', 'ভাইরাস','অন্যান্য','কোন ধারনা নেই');
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