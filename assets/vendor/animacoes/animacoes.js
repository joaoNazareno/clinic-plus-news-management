function throttle(func, wait) {
  var ctx, args, rtn, timeoutID; // caching
  var last = 0;

  return function throttled () {
    ctx = this;
    args = arguments;
    var delta = new Date() - last;
    if (!timeoutID)
      if (delta >= wait) call();
      else timeoutID = setTimeout(call, wait - delta);
    return rtn;
  };

  function call () {
    timeoutID = 0;
    last = +new Date();
    rtn = func.apply(ctx, args);
    ctx = null;
    args = null;
  }
}

var target = document.querySelectorAll('[data-animate]');
var animationClass = 'animate';

var animeScroll = function animeScroll() {
  if(arguments.length > 0) {
    areaScreen = arguments[0];
  }
 
  if(typeof areaScreen ==='object') {
    areaScreen = 0.85;
  }

  var windowTop = window.pageYOffset + window.innerHeight * areaScreen;

  Array.prototype.forEach.call(target, function (element) {

    if (windowTop > element.offsetTop) {
      element.classList.add(animationClass);
    } 
  });
}

animeScroll(1);
var handleScroll = throttle(animeScroll, 200);

if (target.length) {
  window.addEventListener('scroll', handleScroll);
}