<?php require_once "inc/header.php" ?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">পন্য সম্পর্কিত তথ্য</h2>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>উদ্ভিদের নাম</th>
                        <th>সময়কাল(মাস)</th>
                        <th>অবস্থান এলাকা</th>
                        <th>ফলন/বাক্স</th>
                        <th>ফলন/ফুল ঋতু</th>
                    </tr>

                    <?php
                    $kitnames = array('সরিষা ', 'সূর্যমুখী', 'ধোনে', 'কালোজিরা', 'লিচু', 'রাবার', 'সুন্দরবন-১', 'সুন্দরবন-২', 'সুন্দরবন-৩', 'খেসারি', 'ভাঙ্গি','তরমুজ', 'ধৈঞ্চা', 'বরই', 'অন্যান্য', 'সুন্দরবন অন্যান্য');
                    ?>

                    <?php
                    $i = 1;
                    foreach ($kitnames as $row) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row ?></td>
                            <td><input type="text" value="0" class="form-control"></td>
                            <td><input type="text" value="N/A" class="form-control"></td>
                            <td><input type="text" value="N/A" class="form-control"></td>
                            <td><input type="text" value="N/A" class="form-control"></td>
                        </tr>
                    <?php } ?>

                </table>
            </form>
        </div>
    </div>

</div>

<?php require_once "inc/footer.php" ?>