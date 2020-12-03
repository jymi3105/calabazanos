<style>
	.compras {
		display: flex;
		flex-direction: row;
		justify-content: space-between;

	}

	.animacion {
		background-color: rgba(233, 240, 233, 0.3);
		animation-name: example;
		animation-duration: 10s;
	}

	.nav a:hover{
		font-size: 2em;
	}

	.menuP:hover{
		background-color: yellowgreen;
	}

	@keyframes example {
		0% {
			background-color: rgba(165, 42, 42, 0.3);
		}

		25% {
			background-color: rgba(22, 71, 63, 0.3);
		}

		37% {
			background-color: rgba(165, 42, 222, 0.3);
		}

		50% {
			background-color: rgba(5, 242, 242, 0.3);
		}

		60% {
			background-color: rgba(100, 4, 252, 0.3);
		}

		75% {
			background-color: rgba(165, 60, 0, 0.3);
		}

		100% {
			background-color: rgba(255, 255, 42, 0.3);
		}
	}

	.compras a {
		background-color: rgb(200, 200, 200);
		margin: 2%;
		padding: 2%;
		border: 1px solid grey;
		border-radius: 30% 20%;
		box-shadow: 3px 2px 2px rgb(200, 200, 200);
		color: black;
		font-size: 1.3em;
		transition: font-size 0.5s, background-color 2s, box-shadow 2s;
	}

	.compras a:hover {
		background-color: rgb(120, 225, 255);
		font-size: 1.7em;
		box-shadow: 8px 19px 6px rgb(200, 200, 200);
	}

	.actualiza {
		display: flex;
		flex-direction: row;
		column-gap: 100px;
	}

	h2 {
		color: black;
	}

	.footer {
		color: rgb(25, 25, 25);
	}

	.login {
		background-color: rgba(255, 255, 255, 0.4);
		padding: 5%;
		width: 120%;
	}

	.registro {
		background-color: rgba(120, 255, 255, 0.5);
		padding: 5%;
	}

	.titulo {
		background-color: rgba(233, 150, 122, 0.6);
		padding: 1%;
		text-align: center;
	}
</style>