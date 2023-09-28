function wait(milliseconds) {
    return new Promise((resolve) => setTimeout(resolve, milliseconds));
}

const mq = window.matchMedia( "(max-width: 810px)");
const myCookie = getCookie("disableAnimation")

function setCookie(){
    if (!myCookie) {
        wait(20000)
        var now = new Date();
        var time = now.getTime();
        time += 900 * 1000;
        now.setTime(time);
        let expires =  "; expires="+ now.toUTCString();
        document.cookie = "disableAnimation=true" + expires + "; path;"    
    }
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
    

setCookie();

// Service Cards section

const cardObserver = new IntersectionObserver(entry => {
    entry.forEach(async en => {
        if(en.isIntersecting) {
            if (myCookie) {
                document.querySelectorAll(".section-title")[0].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[0].classList.add("instant");
    
                document.querySelectorAll(".section-title")[0].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[0].classList.add("instant");
    
                document.querySelectorAll(".card-box")[0].classList.add("fadeIn");
                document.querySelectorAll(".card-box")[1].classList.add("fadeIn");
                document.querySelectorAll(".card-box")[2].classList.add("fadeIn");
    
                document.querySelectorAll(".card-box")[0].classList.add("instant");
                document.querySelectorAll(".card-box")[1].classList.add("instant");
                document.querySelectorAll(".card-box")[2].classList.add("instant");
    
                document.querySelectorAll(".card-box")[3].classList.add("fadeIn");
                document.querySelectorAll(".card-box")[4].classList.add("fadeIn");
                document.querySelectorAll(".card-box")[5].classList.add("fadeIn");
    
                document.querySelectorAll(".card-box")[3].classList.add("instant");
                document.querySelectorAll(".card-box")[4].classList.add("instant");
                document.querySelectorAll(".card-box")[5].classList.add("instant");    
            } else {
                document.querySelectorAll(".section-title")[0].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[0].classList.add("third");
    
                document.querySelectorAll(".section-title")[0].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[0].classList.add("third");
    
                await wait(200)
                document.querySelectorAll(".card-box")[0].classList.add("fadeInLeft");
                document.querySelectorAll(".card-box")[1].classList.add("fadeInLeft");
                document.querySelectorAll(".card-box")[2].classList.add("fadeInLeft");
    
                document.querySelectorAll(".card-box")[0].classList.add("first");
                document.querySelectorAll(".card-box")[1].classList.add("third");
                document.querySelectorAll(".card-box")[2].classList.add("fifth");
    
                await wait(800)
                document.querySelectorAll(".card-box")[3].classList.add("fadeInRight");
                document.querySelectorAll(".card-box")[4].classList.add("fadeInRight");
                document.querySelectorAll(".card-box")[5].classList.add("fadeInRight");
    
                document.querySelectorAll(".card-box")[3].classList.add("fifth");
                document.querySelectorAll(".card-box")[4].classList.add("third");
                document.querySelectorAll(".card-box")[5].classList.add("first");
    
            }
        }
    })
})

cardObserver.observe(document.querySelector(".card-container"));

// Book a Cab section

const bookCabObserver = new IntersectionObserver(entry => {
    entry.forEach(async en => {
        if(en.isIntersecting) {
            if (mq.matches) {
                if (myCookie) {
                    document.querySelectorAll(".section-title")[1].classList.add("fadeIn");
                    document.querySelectorAll(".section-title")[1].classList.add("instant");
        
                    document.querySelectorAll(".section-content")[0].classList.add("fadeIn");
                    document.querySelectorAll(".section-content")[0].classList.add("instant");
        
                    document.querySelectorAll(".input-wrap")[0].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[1].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[2].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[3].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[4].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[5].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[6].classList.add("fadeIn");
        
                    document.querySelectorAll(".input-wrap")[0].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[1].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[2].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[3].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[4].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[5].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[6].classList.add("instant");
        
                    document.querySelectorAll(".input-wrap")[7].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[7].classList.add("instant");    
    
                } else {
                    await wait(50)
                    document.querySelectorAll(".section-title")[1].classList.add("fadeIn");
                    document.querySelectorAll(".section-title")[1].classList.add("third");
        
                    document.querySelectorAll(".section-content")[0].classList.add("fadeIn");
                    document.querySelectorAll(".section-content")[0].classList.add("fourth");
        
                    await wait(200)
                    document.querySelectorAll(".input-wrap")[0].classList.add("fadeInLeft");
                    document.querySelectorAll(".input-wrap")[1].classList.add("fadeInRight");
                    document.querySelectorAll(".input-wrap")[2].classList.add("fadeInLeft");
                    document.querySelectorAll(".input-wrap")[3].classList.add("fadeInRight");
                    document.querySelectorAll(".input-wrap")[4].classList.add("fadeInLeft");
                    document.querySelectorAll(".input-wrap")[5].classList.add("fadeInRight");
                    document.querySelectorAll(".input-wrap")[6].classList.add("fadeInLeft");
        
                    document.querySelectorAll(".input-wrap")[0].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[1].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[2].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[3].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[4].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[5].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[6].classList.add("fourth");
        
                    document.querySelectorAll(".input-wrap")[7].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[7].classList.add("third");        
                }
            } else {
                if (myCookie) {
                    document.querySelectorAll(".section-title")[1].classList.add("fadeIn");
                    document.querySelectorAll(".section-title")[1].classList.add("instant");
        
                    document.querySelectorAll(".section-content")[0].classList.add("fadeIn");
                    document.querySelectorAll(".section-content")[0].classList.add("instant");
        
                    document.querySelectorAll(".input-wrap")[0].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[1].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[2].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[3].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[4].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[5].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[6].classList.add("fadeIn");
        
                    document.querySelectorAll(".input-wrap")[0].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[1].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[2].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[3].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[4].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[5].classList.add("instant");
                    document.querySelectorAll(".input-wrap")[6].classList.add("instant");
        
        
                    document.querySelectorAll(".input-wrap")[7].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[7].classList.add("instant");    
    
                } else {
                    await wait(400)
                    document.querySelectorAll(".section-title")[1].classList.add("fadeIn");
                    document.querySelectorAll(".section-title")[1].classList.add("third");
        
                    await wait(400)
                    document.querySelectorAll(".section-content")[0].classList.add("fadeIn");
                    document.querySelectorAll(".section-content")[0].classList.add("fourth");
        
                    await wait(950)
                    document.querySelectorAll(".input-wrap")[0].classList.add("fadeInLeft");
                    document.querySelectorAll(".input-wrap")[1].classList.add("fadeInRight");
                    document.querySelectorAll(".input-wrap")[2].classList.add("fadeInLeft");
                    document.querySelectorAll(".input-wrap")[3].classList.add("fadeInRight");
                    document.querySelectorAll(".input-wrap")[4].classList.add("fadeInLeft");
                    document.querySelectorAll(".input-wrap")[5].classList.add("fadeInRight");
                    document.querySelectorAll(".input-wrap")[6].classList.add("fadeInLeft");
        
                    document.querySelectorAll(".input-wrap")[0].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[1].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[2].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[3].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[4].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[5].classList.add("fourth");
                    document.querySelectorAll(".input-wrap")[6].classList.add("fourth");
        
        
                    await wait(800)
                    document.querySelectorAll(".input-wrap")[7].classList.add("fadeIn");
                    document.querySelectorAll(".input-wrap")[7].classList.add("third");        
                }
            }
        }
    })
})

bookCabObserver.observe(document.querySelector(".content-one-third"));

const sectionBObserver = new IntersectionObserver(entry => {
    entry.forEach(async en => {
        if(en.isIntersecting) {
            if (myCookie) {
                document.querySelectorAll(".section-title")[2].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[2].classList.add("instant");
    
                document.querySelectorAll(".section-content")[1].classList.add("fadeIn");
                document.querySelectorAll(".section-content")[1].classList.add("instant");
    
                document.querySelectorAll(".section-content")[2].classList.add("fadeIn");
                document.querySelectorAll(".section-content")[2].classList.add("instant");
    
            } else {
                await wait(150)
                document.querySelectorAll(".section-title")[2].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[2].classList.add("third");
    
                await wait(300)
                document.querySelectorAll(".section-content")[1].classList.add("fadeIn");
                document.querySelectorAll(".section-content")[1].classList.add("fourth");
    
                await wait(900)
                document.querySelectorAll(".section-content")[2].classList.add("fadeIn");
                document.querySelectorAll(".section-content")[2].classList.add("fourth");
    
            }
        }
    })
})

sectionBObserver.observe(document.querySelector("#Start-B"));

const sectionCObserver = new IntersectionObserver(entry => {
    entry.forEach(async en => {
        if(en.isIntersecting) {
            if (myCookie) {
                document.querySelectorAll(".section-title")[3].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[3].classList.add("instant");
    
                document.querySelectorAll(".section-content")[3].classList.add("fadeIn");
                document.querySelectorAll(".section-content")[3].classList.add("instant");
    
                document.querySelectorAll(".animate-contact")[0].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[1].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[2].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[3].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[4].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[5].classList.add("fadeIn");
    
                document.querySelectorAll(".animate-contact")[0].classList.add("instant");
                document.querySelectorAll(".animate-contact")[1].classList.add("instant");
                document.querySelectorAll(".animate-contact")[2].classList.add("instant");
                document.querySelectorAll(".animate-contact")[3].classList.add("instant");
                document.querySelectorAll(".animate-contact")[4].classList.add("instant");
                document.querySelectorAll(".animate-contact")[5].classList.add("instant");
    
                document.querySelectorAll(".animate-contact")[6].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[7].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[6].classList.add("instant");
                document.querySelectorAll(".animate-contact")[7].classList.add("instant");
    
                document.querySelectorAll(".animate-contact")[8].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[8].classList.add("instant");    

            } else {
                await wait(150)
                document.querySelectorAll(".section-title")[3].classList.add("fadeIn");
                document.querySelectorAll(".section-title")[3].classList.add("third");
    
                await wait(250)
                document.querySelectorAll(".section-content")[3].classList.add("fadeIn");
                document.querySelectorAll(".section-content")[3].classList.add("fourth");
    
                await wait(150)
                document.querySelectorAll(".animate-contact")[0].classList.add("fadeInBottom");
                document.querySelectorAll(".animate-contact")[1].classList.add("fadeInBottom");
                document.querySelectorAll(".animate-contact")[2].classList.add("fadeInBottom");
                document.querySelectorAll(".animate-contact")[3].classList.add("fadeInBottom");
                document.querySelectorAll(".animate-contact")[4].classList.add("fadeInBottom");
                document.querySelectorAll(".animate-contact")[5].classList.add("fadeInBottom");
    
                document.querySelectorAll(".animate-contact")[0].classList.add("third");
                document.querySelectorAll(".animate-contact")[1].classList.add("third");
                document.querySelectorAll(".animate-contact")[2].classList.add("third");
                document.querySelectorAll(".animate-contact")[3].classList.add("third");
                document.querySelectorAll(".animate-contact")[4].classList.add("third");
                document.querySelectorAll(".animate-contact")[5].classList.add("third");
    
                await wait(400)
                document.querySelectorAll(".animate-contact")[6].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[7].classList.add("fadeIn");
                document.querySelectorAll(".animate-contact")[6].classList.add("fourth");
                document.querySelectorAll(".animate-contact")[7].classList.add("fourth");
    
                await wait(200)
                document.querySelectorAll(".animate-contact")[8].classList.add("fadeInRight");
                document.querySelectorAll(".animate-contact")[8].classList.add("fourth");    
            }

        }
    })
})

sectionCObserver.observe(document.querySelector("#Start-C"));

// const sectionDObserver = new IntersectionObserver(entry => {
//     entry.forEach(async en => {
//         if(en.isIntersecting) {

//             document.querySelectorAll(".section-title")[4].classList.add("fadeIn");
//             document.querySelectorAll(".section-title")[4].classList.add("third");

//         }
//     })
// })

// sectionDObserver.observe(document.querySelector(".D"));

const sectionEObserver = new IntersectionObserver(entry => {
    entry.forEach(async en => {
        if(en.isIntersecting) {
            if (myCookie) {
            document.querySelectorAll(".section-title")[4].classList.add("fadeIn");
            document.querySelectorAll(".section-title")[4].classList.add("instant");

            document.querySelectorAll(".section-content")[4].classList.add("fadeIn");
            document.querySelectorAll(".section-content")[4].classList.add("instant");


            let boxes = document.querySelectorAll(".post-box");
            for (i=0; i<boxes.length; i++) {
                if (i%2==0) {
                    boxes[i].classList.add("fadeIn");
                } else {
                    boxes[i].classList.add("fadeIn");
                }
                boxes[i].classList.add("instant");
            }
            } else {
                await wait(150)
            document.querySelectorAll(".section-title")[4].classList.add("fadeIn");
            document.querySelectorAll(".section-title")[4].classList.add("third");

            await wait(250)
            document.querySelectorAll(".section-content")[4].classList.add("fadeIn");
            document.querySelectorAll(".section-content")[4].classList.add("fourth");

            await wait(350)

            let boxes = document.querySelectorAll(".post-box");
            for (i=0; i<boxes.length; i++) {
                if (i%2==0) {
                    boxes[i].classList.add("fadeInTop");
                } else {
                    boxes[i].classList.add("fadeInBottom");
                }
                boxes[i].classList.add("second");
                await wait(400);
            }
            }
        }
    })
})

sectionEObserver.observe(document.querySelector("#start-E"));

