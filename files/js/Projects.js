const articles = [
  {
      "source": {
          "id": "cnn",
          "name": "CNN"
      },
      "projectid":"1",
      "author": "Nikki Carvajal and Kate Sullivan, CNN",
      "title": "Project 1- Build an IOS Lab",
      "description": "President Joe Biden on Tuesday urged Congress to pass legislation codifying Roe v. Wade and said a woman's right to have an abortion is \"fundamental,\" but added that .",
      "url": "https://www.cnn.com/2022/05/03/politics/joe-biden-draft-supreme-court-opinion/index.html",
      "urlToImage": "https://i.ytimg.com/vi/nzTxKbLq3kU/maxresdefault.jpg",
      "publishedAt": "2022-05-03T16:33:00Z",
      "content": null
  },
  {
      "source": {
          "id": "bleacher-report",
          "name": "Bleacher Report"
      },
      "projectid":"2",
      "author": "NFL Staff",
      "title": "Project 2- Build a New Library",
      "description": "We have taken another major step toward the 2022  NFL  season.   Over the past several days in Las Vegas, the 2022 NFL draft took place. From first overall pick Travon Walker of the Jacksonville Jaguars to \"Mr...",
      "url": "https://bleacherreport.com/articles/2955829-nfl-power-rankings-where-does-every-team-stand-after-the-2022-nfl-draft",
      "urlToImage": "http://www.metmuseum.org/-/media/images/art/libraries-and-research-centers/costume-institute/costume-reference-library_xl.jpg?la=en&h=940&w=2320&la=en&hash=DFB61638A8D6AD7E5CC43CBA5DB5CBF4",
      "publishedAt": "2022-05-03T16:21:53Z",
      "content": "John Locher/Associated Press\r\nThe New Orleans Saints have had quite the eventful offseason.\r\nThe Saints were in the thick of the Deshaun Watson saga, but after missing on Watson they punted on quarte… [+1999 chars]"
  },
  {
      "source": {
          "id": "usa-today",
          "name": "USA Today"
      },
      "projectid":"3",
      "author": "Christal Hayes, USA TODAY",
      "title": "Project 3 - Research Work",
      "description": "Authorities say a barrel containing human remains was discovered in Lake Mead amid a drought that has dropped water levels to historic lows.",
      "url": "https://www.usatoday.com/story/news/nation/2022/05/02/barrel-human-remains-lake-mead/9620782002/",
      "urlToImage": "http://acnc.uams.edu/wp-content/uploads/2020/03/B31A7910-Edit.jpg",
      "publishedAt": "2022-05-03T15:33:45Z",
      "content": "Authorities in Las Vegas say a barrel containing human remains was discovered in Lake Mead, and more could turn up amid a drought that has dropped the lake's water level to historic lows. \r\nThe barre… [+2757 chars]"
  },
  {
      "source": {
          "id": null,
          "name": "Daily Mail"
      },
      "projectid":"4",
      "author": "Emily Craig",
      "title": "Project 4- Infrastructural Funds",
      "description": "Globally, there have been  228 confirmed patients with the deadly liver disease and 50 more are being probed. Some 145 of these cases are in the UK.",
      "url": "https://www.dailymail.co.uk/news/article-10778613/Mysterious-hepatitis-outbreak-children-spotted-20-countries-says.html",
      "urlToImage": "https://cmsimages.tribuneindia.com/gallary_content/2020/7/2020_7$largeimg_1707507428.jpg",
      "publishedAt": "2022-05-03T15:09:09Z",
      "content": "Eight more countries have reported cases of a mystery hepatitis in children in the past week, the World Health Organization has confirmed.\r\nIt brings the total number of countries with cases to 20.  … [+8619 chars]"
  },
  {
      "source": {
          "id": "the-verge",
          "name": "The Verge"
      },
      "projectid":"5",
      "author": "Nilay Patel",
      "title": "Project 5 - Internal Repair",
      "description": "Stories and lessons from his time at Apple and Google, as told in his new book, Build: An Unorthodox Guide to Making Things Worth Making",
      "url": "https://www.theverge.com/23053632/tony-fadell-build-decoder-apple-iphone-google-alphabet-steve-jobs",
      "urlToImage": "https://www.titannewlifts.co.uk/wp-content/uploads/2019/01/blog-lift-interior-.jpg",
      "publishedAt": "2022-05-03T14:49:20Z",
      "content": "If you buy something from a Verge link, Vox Media may earn a commission. See our ethics statement.Tony Fadell was instrumental in the development of the iPod and iPhone at Apple and then co-founded N… [+61999 chars]"
  },
  {
      "source": {
          "id": null,
          "name": "YouTube"
      },
      "projectid":"6",
      "author": null,
      "title": "Project 6 - More Scholarships",
      "description": "Check out this new Doctor Strange in the Multiverse of Madness clip. Wong takes on a giant foe in this thrilling Doctor Strange in the Multiverse of Madness ...",
      "url": "https://www.youtube.com/watch?v=QvjMNVC1Sdc",
      "urlToImage": "http://www.qs.com/wp-content/uploads/2015/09/shutterstock_309290078.jpg",
      "publishedAt": "2022-05-03T14:30:05Z",
      "content": null
  }
]

articles.forEach((element, i) => {

const main = document.querySelector(".card-main");
console.log(main);
const card = document.createElement('div');
card.classList = 'card';

const projectCard = `
<img src=${articles[i].urlToImage} class="card-img-top" alt="...">
<div class="card-body">
  <h4 class="card-title">${articles[i].title}</h4>
  <p class="card-text">${articles[i].description.slice(0,120)}</p>
  <a href="ProjectsDescription.html?projectid=${articles[i].projectid}" class="btn btn-primary">Read More</a>
</div>
`;

card.innerHTML += projectCard;
main.appendChild(card);

});