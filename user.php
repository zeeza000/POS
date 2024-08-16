<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมลล์</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>

                <?php
        include 'connect.php';
        $sql ="SELECT * FROM tb_user";
        $query = $conn->query($sql);
        while ($result = $query->fetch_object()){
        ?>
                <tr>
                    <td><?php echo $result->username; ?></td>
                    <td><?php echo $result->username; ?></td>
                    <td><?php echo $result->fullname; ?></td>
                    <td><?php echo $result->email; ?></td>
                    <td>x</td>
                </tr>
                <?php }?>
                <tr>

                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมลล์</th>
                    <th>จัดการ</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>