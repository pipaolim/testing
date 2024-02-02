<style>
    
    html{
        font-family: 'Open Sans',sans-serif;
        background: whitesmoke;
    }
    a{
        text-decoration: none;
        color: black;
    }
    hr{
        background: grey;
    }
    #container{
        position: relative;
        display: flex;
    }
    #profile{
        flex: 15%;
        display: block;
        position: relative;
        margin: 5% 2% 0 10%;
        width: 100%;
        height: 100%;
    }
    #info-cards{
        flex: 55%;
        display: block;
        margin-top: 5%;
        margin-right: 10%;
        width: 100%;
        height: 100%;
    }
    #image{
        position: relative;
        overflow: hidden;
    }
    #image,#profile-photo{
        position: relative;
        width: 80px;
        height: 80px;
        border-radius: 10px;
    }
    #image > a{
        position: absolute;
        top:0;
        left:0;
        background: rgba(0,0,0,0.5) !important;
        height: 100%;
        width: 100%;
        display: none;
    }
    #image > a > i{
        -webkit-text-stroke: 1px #ffffffdd;
        padding: 40%;
    }
    #image:hover a{
        display: block;
    }
    #name{
        font-size: 23px !important;
        line-height: 20px !important;
    }
    #about,.card > ul > li{
        padding: 0 0 0 15px;
        position: relative;
        display: inline-block;
        width: 100%;
    }
    #about{
        font-size: 20px !important;
        padding: 0 !important;
    }
    #name, #about > p{
        font-weight: bolder;
        font-family: 'Open Sans', sans-serif;
    }
    #email{
        font-size: 15px !important;
        font-weight: bold !important;
        font-family: 'Cutive Mono',monospace;
    }
    #college,#email,#year-graduation,#education,#more-about,#telephone,#fax{
        color: #555;
        font-size: 13.5px;
    }
    strong,span{
        color: black;
        font-size: 16px;
    }
    #social-links,#about{
        display: inline-block;
    }
    #social-links{
        margin-bottom: 12px;
    }
    #social-links a{
        margin: 0 10px;
    }
    #edit-intro{
        display: block;
        color:#097bbf;
        font-family: 'Nunito', sans-serif;
    }
    .fab{
        font-size: 1.1em;
    }
    .fab,.fas{
        color: whitesmoke;
    }
    #about > a{
        top: 4px;
        right: 8px;
    }
    .edit{
        top: 19px;
        right: 10px;
    }
    #about > a, .edit{
        position: absolute;
        font-size: 15px !important;
    }
    .stroke-transparent {
     -webkit-text-stroke: 1px #000;
     -webkit-text-fill-color: transparent;
    }
    .blue{
        color: #097bbf !important;
        font-size: 13px;
    }
    .stroke-transparent-blue {
     -webkit-text-stroke: 1px #097bbf;
     -webkit-text-fill-color: transparent;
    }
    .card{
        box-shadow: 0 3px 10px 0 rgba(0,0,0,.1);
        overflow-x: hidden;
        margin-bottom: 30px;
        padding: 15px 30px 30px 30px;
        background-color: #fff;
    }
    .card > p{
        color: #0e141e;
        font-weight: bolder;
        font-size: 18px;
        line-height: 2;
    }
    .card > p > i{
        font-size: 18px;
    }
    .card > a{
        font-weight: 400;
        font-size: 15px;
        margin: 0;
        margin-left: 25px;
        padding: 0;
        border: 0;
        height: auto;
        background: transparent;
        color: #097bbf;
        outline: none;
        cursor: pointer;
    }
    .card > ul{
        list-style-type: none;
    }
    .tags{
        font-size: 17px;
        font-weight: bolder;
    }
    .tags ~ a{
        display: none !important;
    }
    .tags span{
        font-size: 14px;
        font-weight: normal;
        color: #0e141e;
    }
    .tags span span{
        color: #738f93;
    }
    @media screen and (max-width:1090px){
        #profile{
            margin-left: 5%;
        }
    }
    @media screen and (max-width:850px){
        #container{
            display: block;
        }
        #profile{
            width: 90%;
        }
        .card{
            margin: 0 5%;
            margin-bottom: 30px;
        }
    }
    </style>
    <div id="inner-nav"></div>
    <div id="container">
        <div id="profile">
            <div id="image">
                <img id="profile-photo" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vecteezy.com%2Ffree-vector%2Fhuman-icon&psig=AOvVaw24mdhsk0obA6CMfvm5FaTE&ust=1705837460923000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCICjs_Xx64MDFQAAAAAdAAAAABAN" alt="Profile-Image">
                <!-- Use Font Awesome icon with the correct class (fas) -->
                <a href="#"><i class="fas fa-pen"></i></a>
            </div>
            <p id="name">Paolo lim<br><span id="email">paololim1129@gmail.com</span></p>
            <p id="designation">Instructor<br><span id="college">Holy Cross College</span></p>
            <div id="social-links"><a href="#"><i class="fab fa-facebook-f stroke-transparent"></i></a><a><i class="fab fa-twitter stroke-transparent"></i></a><a><i class="fab fa-linkedin-in stroke-transparent"></i></a><a><i class="fab fa-github stroke-transparent"></i></a></div>
           <hr width="100%">
            <div id="about">
                <p style="display:inline;">About</p>
                <a href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a>
            </div>
            <p id="year-graduation">Expected Year of Graduation<br><strong>2025</strong></p>
            <p id="education">Education<br><strong> <br><br> Bachelor of Science in Computer Engineering</strong></p>
    
            <p id="telephone">Telephone<br><strong>09265264429</strong></p>
            <p id="fax">Facebook<br><strong>@paolo</strong></p>
        </div>
        <div id="info-cards">
          
            <div class="card">
                <p><i class="fas fa-briefcase stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Work Experience</p>
                <ul>
                    <li><p class="tags">Company XYZ<br><span>Clark, Angeles City | <span>2019</span></span></p>
                        <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                    <li><p class="tags">Macrohard Onfire XYZ<br><span>Pasig City, PH | <span>2022</span></span></p>
                        <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
              
                
                    </ul>
             
            </div>
            <div class="card">
                <p><i class="fas fa-graduation-cap stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Education</p>
                <ul>
                    <li><p class="tags">Holy Cross College<br><span>Bachelor of Science in Computer Engineering | <span>June 2023</span></span></p>
                        <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                    <li><p class="tags">Holy Cross College<br><span>Information and Communication Technology | <span>April 2019</span></span></p>
                        <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                        
                </ul>
                
            </div>
        </div>
    </div>