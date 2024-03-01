@extends('layouts.app')

@section('components')

    var Title = 'Mimosa!';
    var Description = 'Your very own PHP React.js Framework!';                                            

    var onClick = () => { alert('Hello, React!'); }

@endsection

@section('content')

    <div>

        <Header />

        <h1> {Title} </h1>
        <p> {Description} </p>

        <button onClick={onClick}>Click me</button>
    </div>

@endsection