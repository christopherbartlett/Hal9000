var windowX = window.innerWidth;
var windowY = window.innerHeight;

void setup()
{
  size(windowX, windowY);
  background(0);
  fill(255);
  noLoop();
  PFont fontA = loadFont("courier");
  textFont(fontA, 14);  
}

var centerX = windowX / 2;
var centerY = windowY / 2;

void draw(){  
fill(255,0,0);
ellipse(centerX, centerY, 50, 50);


}