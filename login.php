<!-- 상단헤더 연결 -->
<?php
include('./sub/header.php');
?>
<!-- 제이쿼리 -->
<script src="./script/jquery-3.7.1.js"></script>
<!-- 제이쿼리 쿠키 -->
<script src="./script/jquery.cookie.js"></script>
<script>
  $(document).ready(function(){
    let key = $.cookie('idChk');//쿠키이름저장(개발자가 알아서 정함)
    if(key){
      $('#id_txt').val(key);
      $('#id_check').prop('checked', true);
    }

      //3. 체크박스를 체크하지 않고 다시 체크를 풀경우
    $('#id_check').change(function(){
      if($(this).is(':checked')){
        $.cookie('idChk', $('#id_txt').val(), {expires:7, path:'/'});
      }else{
        $.removeCookie('idChk', {path:'/'});
      }
    });

    $('#id_txt').keyup(function(){
      if ($('#id_check').is(':checked')){
        $.cookie('idChk', $(this).val(), {expires: 7, path: '/'});
      }
    });
  });

</script>

<main>
<form name="로그인" method="post" action="login_check.php">
  <fieldset class="login">
    <div class="login_inner">
      <legend>로그인</legend>
      <p>
        <label for="id_txt"></label>
        <input type="text" placeholder="아이디를 입력해주세요." id="id_txt" name="id_txt">
      </p>
      <p>
        <label for="pw_txt"></label>
          <input type="password" placeholder="비밀번호를 입력해주세요." id="pw_txt" name="pw_txt">
      </p>
      <p class="p01">
        <input type="checkbox" id="id_check">
        <label for="id_check">아이디저장</label>
      </p>
      <p>
        <input type="submit" value="로그인" id="login_btn">
      </p>
      <p>
        <a href="#" title="아이디 찾기">아이디 찾기</a>
        <span>|</span>
        <a href="#" title="비밀번호 찾기">비밀번호 찾기</a>
        <span>|</span>
        <a href="./php/register.php" title="회원가입 찾기">회원가입</a>
      </p>
    </div>
  </fieldset>
<form>
</main>

<!-- 하단푸터 연결 -->
<?php
include('./sub/footer.php');
?>