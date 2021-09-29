<style>
/*Start footer*/
footer {
    background-color: #353745;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.footer-container ul {
    font-family: 'Times New Roman', serif;
    margin: 0px;
    padding: 0px 20px;
}
.footer-container h1 {
    color: #9697a0;
    font-size: 20px;
    font-family: inherit;
}
.footer-container ul li a {
    font-size: 16px;
    color: #575a70;
}
.footer-container {
    display: flex;
    justify-content: space-between;
    padding: 3% 0px;
    margin: 5px;
    width: 80%;
    flex-wrap: wrap;
}
.social-icons a {
    width: 35px;
    height: 35px;
    margin: 0px 5px;
    background-color: #424356;
    box-shadow: 2px 2px 12px rgb(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
}
.social-icons {
    display: flex;
}
.search input {
    width: 200px;
    height: 35px;
    text-align: center;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.6);
    border: none;
    outline: none;
    cursor: pointer;
}
.copyrigth {
    font-family: cursive;
    font-size: 12px;
    margin: 10px;
    text-align: center;
    color: #b3b3b3;
}
.social-icons i {
    color: #ffffff;
    font-size: 18px;
}
.footer-container ul li a:hover {
    color: #9697a0;
}
.social-icons a:hover {
    background-color: #9a9ff6;
    transition: all ease 0,5s;
}
.social-icons a:hover i {
    color: #424356;
}
/*End footer*/

@media(max-width:1042px) {
    .s-box,
    .p-box {
        flex-grow: 1;
        margin: 5px;
    }
    .p-box:nth-child(4){
        height: 250px;
        width: 100%;
    }
    .search {
        margin: 20px auto;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .search h1 {
        margin: 20px;
    }
}
@media(max-width:720px){
    .menu a{
        margin: 0px 10px;
        font-size: 14px;
    }
    .sign-in {
        height: 33px;
        width: 80px;
        font-size: 12px;
    }
    .s-box p,
    .s-button {
        display: none;
    }
    .s-box{
        flex-direction: row;
        width: 100%;
        padding: 5px;
    }
    .s-icon {
        height: 40px;
        width: 40px;
    }
    .s-box a{
        font-size: 16px;
        margin: 0px 15px;
    }
    .team-img {
        width: 60px;
        height: 60px;
    }
    .t-box {
        margin: 0px 10px 30px 10px;
    }
    .t-id a{
        font-size: 14px;
    }
    .t-id p{
        font-size: 12px;
    }
    .contact-us{
        height: 150px;
    }
    .contact-us h1{
        font-size: 18px;
    }
    .contact-btn{
        height: 33px;
        width: 120px;
        font-size: 12px;
    }
    .p-box{
        width: 80%;
        margin: 10px;
    }
    .p-heding p {
        width: 80%;
        margin: 10px;
        text-align: center;
    }
    .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .footer-container ul h1 {
        font-size: 25px;
    }
    .footer-container ul li {
        text-align: center;
        margin: 10px;
    }
    .footer-container ul li a {
        font-size: 20px;
    }
    .search {
        display: block;
    }
}
</style>

<!--Start footer-->
<footer>
            <div class="footer-container">

                <!--UL-1-->
                    <ul>
                        <!--heading-->
                        <h1>Team</h1>
                        <!--list-->
                        <li><a href="">Mido Shriks</a></li>
                        <li><a href="">Ahmed Ehaib</a></li>
                        <li><a href="">Marina Magde</a></li>
                    </ul>

                <!--UL-2-->
                     <ul>
                        <!--heading-->
                        <h1>Channel</h1>
                        <!--list-->
                        <li><a href="">Mido shriks</a></li>
                        <li><a href="">Website</a></li>
                        <li><a href="">GodingTeam</a></li>
                    </ul>
                <!--social-->
                    <div class="social">
                        <h1>Social</h1>
                        <!--icons-->
                        <div class="social-icons">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram "></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                <!--Search-->
                    <div class="search">
                        <!--heading-->
                        <h1>Search</h1>
                        <input type="search" placeholder="Search Something Here">
                    </div>
            </div>
                <!--copyrigth-->
                <p class="copyrigth">Going To Internet copyrigth &copy; 2021</p>
        </footer>
    <!--End footer-->
