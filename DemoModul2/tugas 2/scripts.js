document.getElementById('add-button').addEventListener('click', addTodo);

function addTodo() {
    const todoText = document.getElementById('todo-input').value;
    if (todoText === '') return;

    const li = document.createElement('li');
    li.classList.add('todo-item');

    const textSpan = document.createElement('span');
    textSpan.textContent = todoText;

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.classList.add('delete-button');
    deleteButton.onclick = () => li.remove();

    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.classList.add('edit-button');
    editButton.onclick = () => {
        const newTodoText = prompt('Edit task:', textSpan.textContent);
        if (newTodoText !== null) {
            textSpan.textContent = newTodoText;
        }
    };

    li.appendChild(textSpan);
    li.appendChild(editButton);
    li.appendChild(deleteButton);

    document.getElementById('todo-list').appendChild(li);
    document.getElementById('todo-input').value = '';
}
