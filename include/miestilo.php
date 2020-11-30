<style>
	.compras {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
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
</style>