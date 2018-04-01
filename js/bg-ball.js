window.onload = function() {
  // 使用するcanvasを取得
  var canvas = document.getElementById("bg_ball");
  canvas.width = $(window).width();
  canvas.height = $(window).height();


  //canvas.width = $(window).width() + 'px';
  //canvas.height = $(window).height() + 'px';

  // ステージを関連付ける
  var stage = new createjs.Stage( canvas );

  // 赤い丸を描画
  var circle = new createjs.Shape();
  circle.graphics.beginFill("#FF0000");
  circle.graphics.drawCircle(0, 0, 50);
  circle.graphics.endFill();
  circle.x = 100;
  circle.y = 100;
  stage.addChild(circle);

  // フェードイン
  circle.alpha = 0;
  createjs.Tween.get(circle).to({alpha:1}, 3000);

  // フレームレート30で、ステージを更新
  createjs.Ticker.setFPS(30);
  createjs.Ticker.addEventListener("tick", stage);
  stage.update();
};
