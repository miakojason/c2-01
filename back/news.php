<form action="./api/edit.news.php" method="post">
    <table>
        <tr>
            <td>編號</td>
            <td>標題</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $total = $News->count();
        $div = 3;
        $pages = ceil($total / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $now;
        $rows = $News->all(" limit $start,$div");
        foreach ($rows as $row) {
        ?>
      
        <tr>
            <td>編號</td>
            <td>標題<?=$row['text'];?></td>
            <td><input type="checkbox" name="sh[]" value=""></td>
            <td><input type="checkbox" name="del[]" value=""></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct">
        <?php
        ?>
        <input type="submit" value="確定修改">
    </div>
</form>