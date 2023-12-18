import { initializeApp } from 'firebase/app';
import { getAuth, signInWithEmailAndPassword, createUserWithEmailAndPassword, signOut } from 'firebase/auth';
 
 // Replace these values with your Firebase project configuration
 const firebaseConfig = {
	apiKey: "AIzaSyCLqxVq1id1hCJbL3X9C4Hu9GYYu25Whvw",
	authDomain: "test-cd010.firebaseapp.com",
	projectId: "test-cd010",
	storageBucket: "test-cd010.appspot.com",
	messagingSenderId: "302919768668",
	appId: "1:302919768668:web:14f3ed641a617ba6a06499",
	measurementId: "G-SC1GM969LY"
  };

  // Initialize Firebase
  const app = firebase.initializeApp(firebaseConfig);

  // Get references to DOM elements
  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');
  const signInButton = document.getElementById('sign-in');
  const signOutButton = document.getElementById('sign-out');
  const signUpButton = document.getElementById('sign-up');

  // Add event listener for sign-in button
  signInButton.addEventListener('click', () => {
	const email = emailInput.value;
	const password = passwordInput.value;

	firebase.auth().signInWithEmailAndPassword(email, password)
	  .then((userCredential) => {
		// Signed in
		const user = userCredential.user;
		console.log('User signed in:', user);
	  })
	  .catch((error) => {
		console.error('Sign-in error:', error.message);
	  });
  });

  // Add event listener for sign-out button
  signOutButton.addEventListener('click', () => {
	firebase.auth().signOut()
	  .then(() => {
		console.log('User signed out');
	  })
	  .catch((error) => {
		console.error('Sign-out error:', error.message);
	  });
  });

  // Add event listener for sign-up button
  signUpButton.addEventListener('click', () => {
	const email = emailInput.value;
	const password = passwordInput.value;

	firebase.auth().createUserWithEmailAndPassword(email, password)
	  .then((userCredential) => {
		// Signed up
		const user = userCredential.user;
		console.log('User signed up:', user);
	  })
	  .catch((error) => {
		console.error('Sign-up error:', error.message);
	  });
  });