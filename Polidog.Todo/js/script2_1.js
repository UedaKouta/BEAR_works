
    function kakunin(){
     var ret = window.confirm('処理を続行してよろしいですか？');
      var obj = document.getElementById("message");
      if (ret == true) {
        obj.innerText = "処理を実行";
      } else {
        obj.innerText = "処理を中止";
      }
  }
