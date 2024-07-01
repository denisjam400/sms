const Prof_Container = document.getElementById("Profile_Container");
const Profile_Container_ClassDisappear = document.getElementById(
    "Profile_Container_Class_Disappear"
);
const menuBarBox = document.getElementById("menubarbox");
const announcement_button = document.getElementsByTagName(
    "#announcement_button"
);

Prof_Container.addEventListener("mouseover", function () {
    Profile_Container_ClassDisappear.classList.toggle(
        "Profile_Container_Class"
    );
});
