window.onload = function() {
  // 使用するcanvasを取得
  var canvas = document.getElementById("bg_ball");
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();

  canvas.width = windowWidth;
  canvas.height = windowHeight;
  //canvas.width = $(window).width() + 'px';
  //canvas.height = $(window).height() + 'px';

  //ランダムで数字を出す
  var randRange = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  };


  // ステージを関連付ける
  var stage = new createjs.Stage( canvas );

  // 赤い丸を描画
  var circle = new createjs.Shape();
  circle.graphics.beginFill("#ffc600");
  circle.graphics.drawCircle(0, 0, 50);
  circle.graphics.endFill();
  circle.x = randRange(0, windowWidth);
  circle.y = randRange(0, windowHeight);
  stage.addChild(circle);

  // フェードイン
  circle.alpha = 0;
  createjs.Tween.get(circle).to({alpha:1}, 1000);

  // フレームレート30で、ステージを更新
  createjs.Ticker.setFPS(30);
  createjs.Ticker.addEventListener("tick", stage);
  stage.update();
};
