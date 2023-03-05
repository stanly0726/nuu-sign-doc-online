<html>

<head>
    <meta charset="utf-8">
    <title>聯大單一簽單入口</title>
</head>

<body>
    <div>

        <h1>login page</h1>
        <p>
            leave inputbox blank will randomlly generate a token for you
            or you can specify token yourself
        </p>
        <form name='redirect' action={{ $sso_url }} method="post">
            <input type="hidden" name="system_name" value="資訊處服務窗口">
            token: <input name="token">
            <input style="" type="submit" value="提交">
        </form>

    </div>

    <script type="text/javascript">
        // document.redirect.submit();
    </script>

</body>

</html>
