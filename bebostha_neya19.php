<?php require_once "inc/header.php" ?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">কীটপতঙ্গের জন্য নেওয়া ব্যবস্থা</h2>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>কীটপতঙ্গ নাম</th>
                        <th>কীট সংখ্যা/কলোনি</th>
                        <th>নিয়ন্ত্রণ বিকল্প</th>
                        <th>ব্যবস্থাপনা সম্পর্কিত খরচ (টাকা)</th>
                        <th>ফলন/ফুল ঋতু</th>
                    </tr>

                    <?php
                    $kitnames = array('ভারোয়া মাইট ', 'শ্বাসনালীর মাইট', 'মৌচাক বিটল পোকা', 'মোমের মথ', 'ভীমরুল', 'পিঁপড়া', 'পাখি', 'অন্যান্য', 'ব্রাউল ফ্লাই', 'কোন ধারণা নেই');
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