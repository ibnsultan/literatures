@extends('layouts.app')

@section('components')

    var owner = 'Hedy Lamarr';
    var initialTodos = JSON.parse('{!! json_encode($todos) !!}');

    const TodoApp = () => {
        const [todos, setTodos] = React.useState(initialTodos);

        const TodoFormSubmit = (e) => {
            e.preventDefault();
            const newTodo = e.target.elements.todo.value;
            setTodos([...todos, newTodo]);
            e.target.reset(); // Reset the form after submission
        };

        return (
            <div>
                <ul id="toDoList">
                    {todos.map((todo, index) => (
                        <li key={index}>{todo}</li>
                    ))}
                </ul>
                <form onSubmit={TodoFormSubmit}>
                    <input type="text" name="todo" placeholder="Add a todo" />
                    <button type="submit">Add</button>
                </form>
            </div>
        );
    };
    
@endsection

@section('content')

    <div>
        <h1> {owner} </h1>
        <img 
            src="https://cdn-icons-png.flaticon.com/256/6619/6619606.png" 
            className="photo"
        />
        
        <TodoApp />
    </div>

@endsection