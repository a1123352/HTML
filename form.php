<html>
    <head>
        <title> 活動表單 </title>
    </head>
    <body>
    <h1>請填寫表單</h1>
    <?php echo "歡迎各位參加迎新活動，活動費用只需要5000元喔"?><br>
    <h2>活動行程</h2>
    <TABLE BORDER>
        <TR>
        <TH>第一日</TH>
        <TH>第二日</TH>
        <TH>第三日</TH>
        </TR>
        <TR>
            <TD>高雄大學</TD>
            <TD>家樂福</TD>
            <TD>高雄大學</TD>
        </TR>
    </TABLE>
    <br>
    <h3>請填寫個人資料</h3>
    <form name="abc">
        姓名<input name="姓名"><br>
        學號<input name="學號"><br>
        EMAIL<input name="EMAIL"><br>
        <input type="radio" name="sex"value="man" checked>男
        <input type="radio" name="sex"value="girl">女<br>
        <input type="submit" name="send" value="表單送出"><br>
        <input type="reset" name="delete" value="清除">
    </from>
    </body>
</html>