@extends('layout')

@php
  $category = 'Exercises';
  $title = 'Week 1';  
@endphp

@section('content')
<main class="week1">
    <div>
      <h1>Hello, I'm a headline</h1>
      <p>
        I made slight use of css to make this page bearable to look at. Also I didn't want to upload an entire laravel project.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vel voluptate sequi numquam sed iure perspiciatis, <br/>
        quisquam aliquid nulla culpa excepturi rerum, fugit incidunt? Nihil, tempore quibusdam? Dolore, sint excepturi! <br/>
      </p>
    </div>
    <div>
      <h2>I'm an ordered list</h2>
      <ol>
        <li>First element</li>
        <li>Second element</li>
        <li>Third element</li>
      </ol>
      <h2>I'm an unordered list</h2>
      <ul>
        <li>First Element</li>
        <li>Second Element</li>
        <li>Third Element</li>
      </ul>
    </div>
    <div class="image">
      <h2>Geckos are cooler than cats</h2>
      <img src="{{ asset('img/exercises/gecko.jpg')}}" alt="" />
      <span
        ><a
          href="https://www.livescience.com/gecko-fluorescent-green-glow.html"
          >Click here for source</a
        ></span
      >
    </div>
    <div>
      <h2>Tables are really outdated</h2>
      <table>
        <tr>
          <th></th>
          <td>Cool</td>
          <td>Modern</td>
          <td>Outdated</td>
        </tr>
        <tr>
          <th>Tables</th>
          <td>No</td>
          <td>No</td>
          <td>Yes</td>
        </tr>
        <tr>
          <th>Flex</th>
          <td rowspan="2">Yes</td>
          <td rowspan="2">Yes</td>
          <td>No</td>
        </tr>
        <tr>
          <th>Grid</th>
          <td>Sort of</td>
        </tr>
      </table>
    </div>
  </main>
@endsection