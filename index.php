<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
	<title>Km converter</title>
</head>

<body class="w-full h-full flex-col">

	<header class="text-gray-600 body-font">
		<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
			<a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
					viewBox="0 0 24 24">
					<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
				</svg>
				<span class="ml-3 text-xl">Unit converter</span>
			</a>
		</div>
	</header>
	<div class="flex">
		<div class="p-4 md:w-1/3 m-auto">
			<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
				<div class="p-6">
					<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">KM INPUT</h2>
					<div class="relative mb-4">
						<label for="kminput" class="leading-7 text-sm text-gray-600">How many Kms?</label>
						<form action="result.php" class="flex" method="POST">
						<input type="number" id="kminput" name="kminput"
							class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
							<button class="inline-flex text-white bg-indigo-500 border-0 m-1 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">
									Calculate
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>