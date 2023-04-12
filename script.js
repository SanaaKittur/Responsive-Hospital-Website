let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}



function dynamicdropdown(listindex)
  {
      switch (listindex)
      {
      case "HSR" :
          document.getElementById("status").options[0]=new Option("Dr. Rajesh T","Dr. Rajesh T");
          document.getElementById("status").options[1]=new Option("Dr. Shilpa","Dr. Shilpa");
          document.getElementById("status").options[2]=new Option("Dr. Saanvi","Dr. Saanvi");
          document.getElementById("status").options[3]=new Option("Dr. Kashaf Murtuza","Dr. Kashaf Murtuza");
          document.getElementById("slots").options[0]=new Option("7am-9am","7am-9am");
          document.getElementById("slots").options[1]=new Option("9am-11am","9am-11am");
          document.getElementById("slots").options[2]=new Option("1pm-3pm","1pm-3pm");

          break;
      case "BTM" :
          document.getElementById("status").options[0]=new Option("Dr. Aditya","Dr. Aditya");
          document.getElementById("status").options[1]=new Option("Dr. Pratham","Dr. Pratham");
          document.getElementById("status").options[2]=new Option("Dr. Khurshida","Dr. Khurshida");
          document.getElementById("status").options[3]=new Option("Dr. Raghu Nayak","Dr. Raghu Nayak");
          document.getElementById("slots").options[0]=new Option("8am-10am","8am-10am");
          document.getElementById("slots").options[1]=new Option("1pm-3pm","1pm-3pm");
          document.getElementById("slots").options[2]=new Option("5pm-7pm","5pm-7pm");
          break;
      case "KLG" :
        document.getElementById("status").options[0]=new Option("Dr. Mustafa","Dr. Mustafa");
        document.getElementById("status").options[1]=new Option("Dr. Priya","Dr. Priya");
        document.getElementById("status").options[2]=new Option("Dr. Sandra","Dr. Sandra");
        document.getElementById("status").options[3]=new Option("Dr. Sanjeev","Dr. Sanjeev");
        document.getElementById("slots").options[0]=new Option("9am-11am","9am-11am");
        document.getElementById("slots").options[1]=new Option("3pm-5pm","3pm-5pm");
        document.getElementById("slots").options[2]=new Option("8pm-10pm","8pm-10pm");
        break;
      }
      return true;
  }
