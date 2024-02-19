<fieldset>
    <legend>會員註冊</legend>
    <table>
        <span style="color: red;">*請設定您要註冊的帳號及密碼(最常12個字元)*</span>
        <tr>
            <td>Strp1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>Strp2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>Strp3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td>Strp4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="註冊" onclick="reg()">
                <input type="reset" value="清除" onclick="clear()">
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>
<script>
    function clean(){
        $("input[type='text'],input[type='password'],input[type='redio']").val("");
    }
</script>