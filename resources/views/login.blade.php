<html>

<head>
    <meta charset="utf-8">
    <title>聯大單一簽單入口</title>
</head>

<body>
    <form name='redirect' action={{ $sso_url }} method="post">
        <input type="hidden" name="system_name" value="資訊處服務窗口">
        <input style="display: none" type="submit" value="提交">
    </form>

    <script type="text/javascript">
        document.redirect.submit();
    </script>

</body>

</html>
