const togglePassword => {
	button.classList.toggle("showing")

	const input = 
		document.getElelementById("password")

	inout.type =
		input.type === "password"
		 ? "text"
		 : "password"
}