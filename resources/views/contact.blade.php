@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <section class="contact container">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email">
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="08XXXXXXXXX">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Your Message"></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </section>
@endsection