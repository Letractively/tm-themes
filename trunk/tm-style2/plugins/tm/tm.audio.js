/**
 * phi
 */

var tm = tm || {};


(function(){
    
    var Audio = tm.Audio = {
        soundList: {},
        
        isSupport: function() {
            return window.Audio != undefined;
        },
        
        load: function(filename, alias) {
            if (!this.isSupport()) return ;
            
            var name = alias || filename;
            
            if (!this.soundList[name]) {
                this.soundList[name] = new window.Audio(filename);
            }
            
            return this.soundList[name];
        },
        
        get: function(name) {
            return this.soundList[name];
        },
        
        play: function(args) {
            if (!this.isSupport()) return ;
            
            var audio = null;
            if (args["filename"]) {
                audio = new window.Audio(args["filename"]);
            }
            else if (args["sound"]) {
                audio = args["sound"];
            }
            if (audio) {
                audio.volume = args["volume"] || 0.25;
                audio.play();
            }
            
            return audio;
        }
        
    };
    
})();
