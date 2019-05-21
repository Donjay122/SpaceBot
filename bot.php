<!DOCTYPE html>
<html>
    <head>
        <title>BOT</title>
    </head>
    <body>
        <header>
            <span style="color: red; font-style: italic; position: absolute; left: 20%; top: 3%; font-size: .7em;" id="logIcon">offline</span>
            <div class="main-header" style="display: flex; font-style: italic;">
                <img src="img/codespace-primary-logo.svg" width="200px;">
            </div>
            <div class="navigators"><a href="#"><span>Spacebot</span></a>&nbsp;&nbsp;&nbsp;<a href="#"><span id="engineTag">Engine</span></a><a><span>Github</span></a></div>
        </header>
        <main>
            <div class="main-content">
                
                <ul class="list" style="
                                        height: 500px; max-height: 500px; overflow: auto; position: relative; width: 500px; margin-top: 20px;">
                </ul>
                <form action="#" method="get">
                    <input type="password" style=" display: inline;width: 30% ; font-size: 20px; border: none; box-shadow: 2px 2px 30px black; padding: 20px; border-radius: 5px; font-style: italic;" placeholder="start typing...">
                    <button type="button" style=" display: inline;width: 10% ; font-size: 30px; box-shadow: 2px 0px 30px grey; padding: 15px; margin-left: 2px; border-radius: 5px; color: white; background-color: black; cursor: pointer;">Send</button>
                </form><i id="error" style="margin: 0; padding: 10px; color: orange; float: none;"></i>
                <div class="engine">
                    
                </div>
            </div>
            <audio id="mysound">
                <source src="mp3/unsure.mp3" type="audio/mp3">
            </audio>
        </main>
        <footer style="font-size: 15px; margin: auto; padding: 10px;">&copy; 2019 ayodeji codespace academy</footer>

        <style>
/*             SOME STYLES HERE     SOME STYLES HERE          SOME STYLES HERE                */ 
            .navigators{
                position: absolute;
                left: 70%;
                top: 3%;
            }
            a{
                color: white;
                text-decoration: none;
                font-style: italic;
                margin: 20px;
            }
            li{
                background-color: white;
                box-shadow: 3px 3px 5px grey;
                list-style: none;
                padding: 15px;
                max-width: 70%;
                margin: 10px -15px;
                right: 50%;
                border-radius: 5px;
                font-family: sans-serif;
                overflow: hidden;
            }
            
            li:hover{
                transform: scale(1.02);
                cursor: pointer;
            }
            
            form{
                display: flex;
            }
            
            body{
                font-family: sans-serif;
                min-height: 97.8vh;
                background-size: cover;
                background-image: linear-gradient(to right,white, 50%,transparent 80%),
                                  url(img/wallpaper3.jpg);
                
            }
            
            i{
                font-size: 15px;
                display: block;
                float: right;
                color: limegreen;
                
            }
            
            .profileuser{
                position: fixed;
                top: 18%;
                left: 63%;
                font-size: 20px;
                color: white;
                font-style: italic;
            }
            
        
/*             SOME STYLES HERE     SOME STYLES HERE          SOME STYLES HERE                */ 
        </style>  
        
        
        <script>
            
// SCRIPTS HERE///////////////////////////////////// SCRIPTS HERE///////////////////////////////////            
            let userInput = document.querySelector('input');
            userInput.focus();
            let errorTag = document.getElementById('error')
            let sound = document.getElementById('mysound');
            let passKey = 'Gbenga25@';
            let randomFunction = ()=> Math.floor(Math.random()*6);
            let playSound = ()=> sound.play();
            let dateFunction = ()=>{
                let date = new Date();
                let h = date.getHours();
                let m =date.getMinutes();
                return 'sent on '+h+':'+m;
            }
        //////////////////////BRAIN///////////////////////////////////////////////// 
        //////////////////////BRAIN///////////////////////////////////////////////// 
        //////////////////////BRAIN///////////////////////////////////////////////// 
            let brain = [
              {request: ['hello', 
                         'dgdhjd', 
                         'hey', 
                         'morning',
                         'afternoon',
                         'you?',
                         'codespace',
                         'thanks',
                         'exchange',
                         'market',
                         'rip',
                         'ether',
                         'bit',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                         'bye',
                        ],
               
               
               response:['how are you doing ?',
                         'How many i help you today ?' ,
                         'Hi there!',
                         'How was your night ?',
                         'Hows your day going ?',
                         'Im doing ok. Thanks',
                         '6 Beach road, Woodstock',
                         'shut the fuck up',
                         '',
                         
                         '<div style="height:256px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 99%;"><div style="height:236px;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=3&pref_coin_id=1505&graph=yes" width="100%" height="232" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>',
                         
                         '<div style="width: 320px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=619&pref_coin_id=1505" width="320" height="196" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;" height="100%" width="100%"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>',
                         
                         '<div style="width: 320px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=145&pref_coin_id=1505" width="320" height="196" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;" height="100%" width="100%"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>',
                         
                         '<div style="width: 320px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=859&pref_coin_id=1505" width="320" height="196" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;" height="100%" width="100%"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Welcome',
                         'Take care']},
            ];
        ////////////////////BRAIN//////////////////////////////////////////////////   
        //////////////////////BRAIN///////////////////////////////////////////////// 
        //////////////////////BRAIN///////////////////////////////////////////////// 
            
            
            ///////////////////////////USERS///////////////////////////////////
            let systemUsers = [
                { clientName:['Ayodeji Adediran', 'Oluwasina Adediran','Jane Doe'],
                 clientKey:['Gbenga25@','Adex4321@','Password'],
                 role:['Admin','Director','Editor']
                }
            ];
            
            
            
            
            ////////////////////////////////////////////////////////////////
            
//////////////////////////////////////////BOT TRIGGER/////////////////////////////////////////////            
            
            let container = document.querySelector('.main-content');
            const botTrigger = ()=>{
            let li = document.createElement('li');
            li.style.Color = 'red';
            let ul = document.getElementsByTagName('ul')[0];
            li.textContent = 'Enter Key';
            li.style.backgroundColor = 'tomato';
            li.style.marginLeft = '20%';
            let chatTime = document.createElement('i');
            chatTime.textContent = dateFunction();
            li.appendChild(chatTime);
            chatTime.style.color ='white';
            playSound();
            ul.appendChild(li);};//// trigger function<===
            /////////LISTENER
            setTimeout(()=>{
                botTrigger();
            },3000);
            

            
            
//////////////////////////////////////////////BOT TRIGGER/////////////////////////////////////////            
            
            
            
            
const bot = ()=>{/////////////////////////////////////////////MAIN FUNCTION/////////////////////////
            userInput.setAttribute('type','text');
            container.addEventListener('click', (event)=>{
                if(event.target.tagName === 'BUTTON'){
                     let li = document.createElement('li');
                     let chatTime = document.createElement('i');
                     chatTime.textContent = dateFunction();
                     let ul = document.getElementsByTagName('ul')[0];
                     li.textContent = userInput.value.toLowerCase();
                if(userInput.value == ""){
                    errorTag.textContent = 'required';
                    errorTag.setAttribute('required');
                   }
                    setTimeout(()=>{
                        li.appendChild(chatTime);
                        ul.appendChild(li);
                    },1000);
                for(let i=0; i<brain[0].request.length;i++){
                if(userInput.value.toLowerCase().match(brain[0].request[i])){
                     userInput.value ='';
                     let li = document.createElement('li');
                     let chatTime = document.createElement('i');
                     let ul = document.getElementsByTagName('ul')[0];
                     li.innerHTML = brain[0].response[i];
                     chatTime.textContent = dateFunction();
                     li.style.backgroundColor = 'tomato';
                     li.style.color = 'white';
                     li.style.marginLeft = '20%';
                     li.style.left = '40%';
                     li.style.lineHeight = '1.5';
                setTimeout(()=>{
                    chatTime.style.color ='white';
                    li.appendChild(chatTime);
                    ul.appendChild(li);
                    playSound();
                },3000);
                }}
                if(userInput.value!= ''){
                     errorTag.style.display = 'none';
                     userInput.value = '';
                     let li = document.createElement('li');
                     let ul = document.getElementsByTagName('ul')[0];
                     li.textContent = 'what do you mean ?';
                     li.style.backgroundColor = 'tomato';
                     li.style.color = 'white';
                     li.style.marginLeft = '20%';
                     li.style.left = '40%';
                setTimeout(()=>{
                    ul.appendChild(li);
                    playSound();
                },3000);
                       }}})
            
 }//////bot   ///////////////////////////////////////////////////////////////////////////////////////        
       container.addEventListener('click',(event)=>{
        if(event.target.tagName ==='BUTTON'){
            if(userInput.value == passKey){
                setTimeout(()=>{
                   let profileName = document.createElement('span');
                   let profileImage = document.createElement('img');
                   profileImage.setAttribute('src','profileimage.jpg');
                   profileImage.style.borderRadius = '50%';
                   profileImage.style.width = '10%';
                   profileImage.style.position = 'fixed';
                   profileImage.style.left = '50%';
                   profileImage.style.padding = '10px';
                   profileImage.style.backgroundColor = 'white';
                   profileImage.style.border = 'solid 2px tomato';
                   profileName.innerHTML = systemUsers[0].clientName[0];
                   profileName.innerHTML+='<br>'+'<i style=" float: left;">'+systemUsers[0].role[0];
                   profileName.className = 'profileuser';
                   let ul = document.getElementsByTagName('ul')[0];
                   ul.firstElementChild.style.display = 'none';
                   ul.appendChild(profileImage);
                   ul.appendChild(profileName);
                   userInput.value = '';
                   bot();
                   let loginIcon = document.getElementById('logIcon');
                   loginIcon.style.color = 'green';
                   loginIcon.textContent = 'Online';                      
                   },1000)

               }
           }
       })     
                    
            
            
            
            
            
            
// SCRIPTS HERE///////////////////////////////////// SCRIPTS HERE///////////////////////////////////            
        </script>
    </body>
</html>