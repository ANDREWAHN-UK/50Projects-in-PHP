const APIURL = "https://api.github.com/users/";

const form = document.getElementById("form");
const search = document.getElementById("search");
const main = document.getElementById("main");

async function getUser(username) {
  try {
    const { data } = await axios(APIURL + username);
    createUserCard(data);
    getRepos(username)
  } catch (err) {
    if (err.response.status == 404) {
      createErrorCard("No profile with this user name found");
    }
  }
}

function createErrorCard(message) {
  const cardHTML = `
   <div class="card">
           <h1>${message}</h1>
          </div>
  `;

  main.innerHTML = cardHTML;
}

function createUserCard(user) {
  const cardHTML = `
          <div class="card">
            <div>
                <img src="${user.avatar_url}" alt="${user.name}" class="avatar">
            </div>

            <div class="user-info">
                <h2>${user.name}</h2>
                <p>${user.bio == null ? "Bio is not available for this user" : user.bio}</p>
                <ul>
                    <li>${user.followers} <strong>followers</strong></li>
                    <li>${user.following} <strong>following</strong></li>
                    <li>${user.public_repos}<strong>repos</strong></li>
                </ul>

                <div id="repos">
                  
                </div>
            </div>
          </div>
        `;

  main.innerHTML = cardHTML;
}

async function getRepos(username){
  try {
    const { data } = await axios(APIURL + username + '/repos?sort=created');
    addReposToCard(data);
  } catch (err) {
   
      createErrorCard("Oh no, a problem encountered hunting for the repos");
    
  }
}

function addReposToCard(repos){
  const reposEL = document.getElementById('repos')
    repos
    .slice(0,5)
    .forEach(repo => {
      const repoLink = document.createElement('a')
      repoLink.classList.add('repo')
      repoLink.href = repo.html_url
      repoLink.target='_blank'
      repoLink.innerText = repo.name
      reposEL.appendChild(repoLink)
    })
}

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const user = search.value;

  if (user) {
    getUser(user);

    search.value = "";
  }
});
