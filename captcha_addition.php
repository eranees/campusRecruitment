<script type="text/javascript">
  function Captcha1() {
    x = Math.floor(Math.random() * 10);
    y = Math.floor(Math.random() * 10);
    document.getElementById("mainCaptcha1").innerText = x + " " + "+" + " " + y + " " + "=";
  }

  function ValidCaptcha1() {
    var string1 = x + y;
    var string2 = document.getElementById('txtInput1').value;
    if (string1 == string2) {
      return true;
    } else {
      document.getElementById('cap1').style.visibility = 'visible';
      Captcha1();
      return false;
    }
  }
</script>

<style type="text/css">
  #cap1 {
    visibility: hidden;
    margin-top: 6px;
    background-color: #f2dede;
    color: #a94442;
    padding: 5px 0px;
    text-align: center;

  }

  #mainCaptcha1 {
    font-size: 17px;
    background-color: black;
    color: white;
    padding: 10px;
    border-radius: 5px;
    width: 100px;
    text-align: center;
  }

  #wrapper-cap1 {
    padding-top: 20px;
    margin-left: 20%;
  }

  #txtInput1 {
    width: 20%;
    height: 40px;
    margin-top: 30px;
  }
</style>