//Audio HTML Запрет одновременного воспроизведения песен + последовательное воспроизведение.
        let audioNL = document.querySelectorAll('audio');
        let audio = Array.apply(null, audioNL);

        audio.forEach(t => {
            let index = audio.indexOf(t);

            t.addEventListener('play', ()=> {
                audio.forEach(subT => {
                    subT !== audio[index] ?
                    (subT.pause(), subT.currentTime = 0) :
                    subT.play()
                })
            })
            t.addEventListener('ended', ()=> {
                t.currentTime = 0;
                index !== audio.length - 1 ?
                    audio[index + 1].play() :
                    null
            })
        });
        
