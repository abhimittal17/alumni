//let searchResultsBox = document.getElementById("search-results-box");


function filterAccordion(e){
    console.log(e)
    console.log(e.parentNode.querySelector(".filter-accordion"));
    e.parentNode.querySelector(".filter-accordion").classList.toggle("hide-accordion");
    e.parentNode.querySelector(".filter-accordion").classList.toggle("d-flex");
    e.parentNode.querySelector(".caret").classList.toggle("fa-rotate-180");
}


// const alumniData = [
//     {
//      "Name": "Ansh Aneja",
//      "Session": 2023,
//      "RegNo": 101,
//      "Department": "Engineering & Technology",
//      "Degree": "B.Tech",
//      "Country": "USA",
//      "State": "Punjab",
//      "City": "Patiala",
//      "Company": "Amazon",
//      "Position": "Jr. Software Engineer"
//     },
//     {
//      "Name": "Vishal Aneja",
//      "Session": 2023,
//      "RegNo": 102,
//      "Department": "Engineering & Technology",
//      "Degree": "B.Tech",
//      "Country": "INDIA",
//      "State": "Bihar",
//      "City": "Patna",
//      "Company": "Google",
//      "Position": "Jr. Software Engineer"
//     },
//     {
//      "Name": "Jaspal Singh",
//      "Session": 2016,
//      "RegNo": 103,
//      "Department": "Engineering & Technology",
//      "Degree": "B.Tech",
//      "Country": "CANADA",
//      "State": "Himachal Pradesh",
//      "City": "Shimla",
//      "Company": "Intuit",
//      "Position": "Sr. Software Engineer"
//     },
//     {
//      "Name": "Manisha Bansal",
//      "Session": 2023,
//      "RegNo": 104,
//      "Department": "Arts",
//      "Degree": "B.A Honors",
//      "Country": "INDIA",
//      "State": "Maharastra",
//      "City": "Mumbai",
//      "Company": "Delloitte",
//      "Position": "Accountant"
//     },
//     {
//      "Name": "Gurmeet Singh",
//      "Session": 2016,
//      "RegNo": 105,
//      "Department": "Business Management & Commerce",
//      "Degree": "B.Com ",
//      "Country": "INDIA",
//      "State": "Tamil Nadu",
//      "City": "Chennai",
//      "Company": "Delloitte",
//      "Position": "Accountant"
//     },
//     {
//      "Name": "Amandeep Kaur",
//      "Session": 2012,
//      "RegNo": 106,
//      "Department": "Business Management & Commerce",
//      "Degree": "BBA",
//      "Country": "INDIA",
//      "State": "Himachal Pradesh",
//      "City": "Kufri",
//      "Company": "Microsoft",
//      "Position": "Marketing Assistant"
//     },
//     {
//      "Name": "Kuldeep Singh Dhillon",
//      "Session": 2012,
//      "RegNo": 107,
//      "Department": "Business Management & Commerce",
//      "Degree": "MBA",
//      "Country": "INDIA",
//      "State": "Maharastra",
//      "City": "Pune",
//      "Company": "Amazon",
//      "Position": "Hiring Manager"
//     },
//     {
//      "Name": "Harpreet  Kaur",
//      "Session": 2016,
//      "RegNo": 108,
//      "Department": "Law",
//      "Degree": "B.A LLB",
//      "Country": "INDIA",
//      "State": "Tamil Nadu",
//      "City": "Pondicherry",
//      "Company": "Amazon",
//      "Position": "Jr. Advocate"
//     },
//     {
//      "Name": "Nitin Kumar",
//      "Session": 2020,
//      "RegNo": 109,
//      "Department": "Law",
//      "Degree": "B.A LLB",
//      "Country": "INDIA",
//      "State": "Punjab",
//      "City": "Ludhiana",
//      "Company": "Amazon",
//      "Position": "Sr. Advocate"
//     }
// ];

// alumniData.forEach((alumni)=> {
//     searchResultsBox.insertAdjacentHTML("beforeend",`<div class="user-profile-card">
//     <div class="profile-card-image-container">
//         <img class="profile-card-image" src="./images/profile.jpeg"/>
//     </div>
//     <h5 >${alumni.Name}</h3>
//     <h5 class="search-profile-card-position">${alumni.Position}</h5>
//     <h5 class="search-profile-card-position">at ${alumni.Company}</h6>
//     <h6 class="search-profile-card-location">${alumni.City}, ${alumni.Country}</h6>
//     <button class="button__primary">Message</button>
//     </div>`);
// })




// let searchQuery = document.getElementById("search-bar");
// let regNo = document.getElementById("RegNo");
// let country = document.getElementById("country");
// let session = document.getElementById("session");
// let department = document.getElementById("department");
// let degree = document.getElementById("degree");
// let state = document.getElementById("state");
// let city = document.getElementById("city");
// let company = document.getElementById("company");
// let position = document.getElementById("position");
// function searchResultsHandler(e){

//     console.log(searchQuery);
//     // if country filter is applied, then check for country otherwise don't
//     const searchResults = alumniData.filter( (alumni)=> 
//         alumni.Name.toLowerCase().includes(searchQuery.value.toLowerCase())
//         && ( regNo.value? alumni.RegNo ==  regNo.value : true) 
//         && ( country.value? alumni.Country===country.value : true )
//         && ( session.value? alumni.Session ===  session.value : true)
//         && ( department.value? alumni.Department ===  department.value : true)
//         && ( degree.value? alumni.Degree ===  degree.value : true)
//         && ( state.value? alumni.State ===  state.value : true)
//         && ( city.value? alumni.City ===  city.value : true)
//         && ( company.value? alumni.Company ===  company.value : true)
//         && ( position.value? alumni.Position ===  position.value : true)
//         );

//     searchResultsBox.innerHTML = '';
//     searchResults.forEach((alumni)=> {
//         searchResultsBox.insertAdjacentHTML("beforeend",`<div class="user-profile-card">
//         <div class="profile-card-image-container">
//             <img class="profile-card-image" src="./images/profile.jpeg"/>
//         </div>
//         <h5 >${alumni.Name}</h3>
//         <h5 class="search-profile-card-position">${alumni.Position}</h5>
//         <h5 class="search-profile-card-position">at ${alumni.Company}</h6>
//         <h6 class="search-profile-card-location">${alumni.City}, ${alumni.Country}</h6>
//         <button class="button__primary">Message</button>
//         </div>`);
//     })
// }

// function clearFilters(){
//     regNo.value = "";
//     country.value = "";
//     session.value = "";
//     department.value = "";
//     degree.value = "";
//     state.value = "";
//     city.value = "";
//     company.value = "";
//     position.value = "";

// }
// const searchBar = document.getElementById("search-bar");
// searchBar.addEventListener("keydown",(e)=> {
//     if(e.key === "Enter"){
//         searchResultsHandler();
//     }
// })