<!-- 
네이티브 앱 키 3705576abb808549189b5f7387c5a2e2
REST API 키 973a4fb27c0a9a7348789e14a50c21c3
Javascript 키 e15f8508b5a9b6d72a1a2affd1475951
Admin 키 3c237f1479916fd91294307a22c026a5 
-->
<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login Demo - Kakao Javascript SDK</title>
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
  </head>
  <body>

    <a id="kakao-login-btn"></a>


    <script>
      // 사용할 앱의 Javascript 키를 설정해 주세요.
      Kakao.init('e15f8508b5a9b6d72a1a2affd1475951');

      // 카카오 로그인 버튼을 생성합니다.
      Kakao.Auth.createLoginButton({
        container: '#kakao-login-btn',
        success: function(authObj) {
          console.log(authObj);
          // alert(JSON.stringify(authObj));
			Kakao.API.request({
				url: '/v1/user/me',
				success: function(res) {
					console.log(res);
					// alert(JSON.stringify(res));
				},
				fail: function(error) {
					console.log(res);
					//alert(JSON.stringify(error))
				}
			});
        },
        fail: function(err) {
          alert(JSON.stringify(err))
        }
      });

    </script>
  </body>
</html>