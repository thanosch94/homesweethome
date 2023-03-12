class User {
  constructor(name, id) {
    this.name = name;
    this.id = id;
  }
}

class UserList {
  constructor(userSelector) {
    this.userList = [];
    this.$userList = document.querySelector(userSelector);
    this.addEvent();
  }

  addEvent() {
    this.$addUserBtn = document.querySelector(".addUserBtn");
    this.$addUserBtn.addEventListener("click", this.generateInput);
  }

  generateInput() {
    this.$newUserInput = document.querySelector(".newUserInput");
    this.$newUserInput.innerHTML = `   <form action="daily_tasks.php" method="post"><input class=" h-auto col-10" name="newUser" type='text'/>
    <button class="btn center col-1 ms-1 p-1 h-auto text-light" type="submit">+</button></form>`;
  }
}

const test = new UserList(".newUserInput");

class Todo {
  constructor(title) {
    this.title = title;
  }
}

class TodoList {
  constructor(listSelector) {
    this.list = [];
    this.$list = document.querySelector(listSelector);
    this.initialize();
    this.addEvents();
  }

  initialize() {
    const template = `<div class=" ms-1 me-lg-5">
                        <h2 class="col-12  center">Νεα εργασία</h2>
                        <div class="row justify-content-center justify-content-sm-center justify-content-md-center">
                            <input class=" col-8 col-sm-7 col-md-8 col-lg-10 todo-entry" style="height:50px"/>
                            <p class="col-3 col-sm-3 col-md-2 col-lg-2 text-light pt-3 pb-3 text-center center btn btn-submit todo-add-button" style="height:50px">Προσθήκη</p>
                        </div>
                    </div>
                    <div class="items mt-5 row justify-content-sm-center justify-content-md-center justify-content-lg-start">
                    </div>`;

    this.$list.innerHTML = template;
    if (JSON.parse(localStorage.getItem("todos")) !== null) {
      this.list = JSON.parse(localStorage.getItem("todos"));
    }
    this.renderItems();
  }

  addEvents() {
    this.$todoEntry = document.querySelector(".todo-entry");
    this.$todoAddButton = document.querySelector(".todo-add-button");
    this.input = document.querySelector("input");
    this.$user = document.querySelectorAll(".user");
    this.$user.forEach((user) => {
      user.addEventListener("click", this.addColorClass);
    });

    this.input.addEventListener("keyup", this.addTodoOnEnter);
    this.$todoAddButton.addEventListener("click", this.handleAddTodo);
    this.$list.addEventListener("click", this.handleTodoClick);
  }

  addColorClass = (e) => {
    this.$user.forEach((otheruser) => {
      otheruser.classList.remove("darkgreycolor");
      e.target.classList.add("darkgreycolor");
    });
  };

  addTodoOnEnter = (e) => {
    if (e.key === "Enter") {
      this.handleAddTodo();
    }
  };

  handleAddTodo = (e) => {
    const title = this.$todoEntry.value;
    if (title) {
      const newTodo = new Todo(title);
      this.addTodo(newTodo);
      this.$todoEntry.value = "";
    }
  };

  handleTodoClick = (e) => {
    const className = e.target.className;
    if (className.includes("btn-delete")) {
      this.deleteTodo(e);
    }
  };
  addTodo(todo) {
    this.list.push(todo);
    this.renderItems();
    localStorage.setItem("todos", JSON.stringify(this.list));
  }

  deleteTodo(e) {
    const $todo = e.target.closest(".noteId");
    const idParts = $todo.id.split("-");
    const index = parseInt(idParts[1]);

    this.list.splice(index, 1);

    this.renderItems();
    const storage = localStorage.setItem("todos", JSON.stringify(this.list));
    console.log(storage);
  }
  renderItems() {
    this.$listItems = this.$list.querySelector(".items");
    const todoTemplate = this.list.map((item, i) => {
      const { title } = item;
      return `
              <div class="col-sm-10 col-md-5 col-lg-3 me-lg-4 ms-md-3 ms-sm-0  mb-5 noteId bg-warning justify-content-md-center" id="todo-${i}" style="height:250px">
                  <div class="row">
                      <h4 class="col-10 col-lg-10 col-sm-10 text-center ">Εργασία ${
                        i + 1
                      }</h4>
                      <span class="col-2 col-lg-2 col-sm-2 btn btn-danger btn-delete center">x</span>
                  </div>
                  <p class="mt-4">${title} </p>
              </div>      `;
    });
    this.$listItems.innerHTML = todoTemplate.join("");
  }
}

const list = new TodoList(".todo-list");
