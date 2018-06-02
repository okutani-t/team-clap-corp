window.onload = function() {
  // 使用するcanvasを取得
  var canvas = document.getElementById("bg_ball");
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();

  canvas.width = windowWidth;
  canvas.height = windowHeight;

  //ランダムで数字を出す
  var randRange = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  };

  // ステージを関連付ける
  var stage = new createjs.Stage(canvas);
  var tick = function(eventObject) {
    var delta = eventObject.delta;
    addBall(delta);
    stage.update();
  }

  var duration = 0;
  var interval = 250;

  var addBall = function(delta) {
    duration += delta;
    if (duration > interval) {
      var circle = new createjs.Shape();
      circle.graphics.beginFill("#ffc600");
      var ballSize = randRange(35, 75);
      circle.graphics.drawCircle(0, 0, ballSize);
      circle.graphics.endFill();
      circle.x = randRange(0, windowWidth);
      circle.y = randRange(0, windowHeight);
      stage.addChild(circle);
      // フェードイン
      circle.alpha = 0;
      createjs.Tween.get(circle).to({alpha:1}, 1500);

      duration = 0;

      // フェードアウト
      setTimeout(function() {
        createjs.Tween.get(circle).to({alpha:0}, 1500);
      }, 12000);

      setTimeout(function() {
        stage.removeChild(circle);
      }, 14000);

    }
  }

  createjs.Ticker.setFPS(30);
  createjs.Ticker.addEventListener("tick", tick);
};
