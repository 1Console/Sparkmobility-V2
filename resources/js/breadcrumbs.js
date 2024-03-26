const Breadcrumbs = {
	breadcrumbs: [],

	init() {
		this.generateBreadcrumbs();
		this.renderBreadcrumbs();
	},

	generateBreadcrumbs() {
		const urlPath = window.location.pathname;
		const urlParts = urlPath.split("/").filter((part) => part.trim() !== "");

		urlParts.forEach((part) => {
			const url = `/${part}/`;
			const words = part.split("-");
			const capitalizedText = words
				.map((word, index) =>
					index === 0 ? word.charAt(0).toUpperCase() + word.slice(1) : word
				)
				.join(" ");
			this.breadcrumbs.push({ text: capitalizedText, url: url });
		});
	},

	renderBreadcrumbs() {
		const bcrumbsDiv = document.querySelector(".bcrumbs");
		if (!bcrumbsDiv) return;

		bcrumbsDiv.innerHTML = this.createBreadcrumbsHTML();
	},

	createBreadcrumbsHTML() {
		const lastItem = this.breadcrumbs.length - 1;

		const skeletonLoader = `
        <div class="mb-5 flex md:w-auto shadow">
            <div class="animate-pulse flex w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-gray-700 md:w-auto" aria-label="Breadcrumb">
                <ol itemScope itemType="http://schema.org/BreadcrumbList" class="inline-flex items-center gap-1.5 rtl:space-x-reverse">
                    <li class="inline-flex items-center ms-1">
                        <div class="w-5 h-5 bg-slate-200 rounded-full"></div>
                    </li>
                    <li class="inline-flex items-center ms-1">
                        <div class="w-20 h-4 bg-slate-200 rounded-full"></div>
                    </li>
                    <li class="inline-flex items-center ms-1">
                        <div class="w-32 h-4 bg-slate-200 rounded-full"></div>
                    </li>
                    <li class="inline-flex items-center ms-1">
                        <div class="w-40 h-4 bg-slate-200 rounded-full"></div>
                    </li>
                </ol>
            </div>
        </div>
    `;

		if (this.breadcrumbs.length === 0) {
			return skeletonLoader;
		}

		// Generate breadcrumbs HTML
		return `
        <div class="mb-5 flex md:w-auto">
            <nav class="flex w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-gray-700 md:w-auto" aria-label="Breadcrumb">
                <ol itemScope itemType="http://schema.org/BreadcrumbList" class="inline-flex items-center gap-1.5 rtl:space-x-reverse">
                    <li class="inline-flex items-center ms-1">
                        <a href="/" class="text-sm font-normal text-gray-400 hover:text-brand-400">
                            <svg class="me-2.5 size-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                        </a>
                    </li>
                    ${this.breadcrumbs
						.map(
							(breadcrumb, index) => `
                    <li ${index === lastItem ? 'aria-current="page"' : ""} itemProp="itemListElement" itemScope itemType="http://schema.org/ListItem" class="inline-flex items-center">
                        <a itemProp="item" href="${index === lastItem ? "" : breadcrumb.url}" class="${index === lastItem ? "font-medium text-gray-500 pointer-events-none" : "font-normal text-gray-400 hover:text-brand-400"} text-xs me-2">
                            <span itemprop="name">${breadcrumb.text}</span>
                        </a>
                        <meta itemProp="position" content="${index + 1}" />

                        ${
							index < lastItem
								? `<svg class="me-1 size-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m10 16 4-4-4-4"/>
                        </svg>`
								: ""
						}
                    </li>
                    `
						)
						.join("")}
                </ol>
            </nav>
        </div>
    `;
	},
};

export default Breadcrumbs;
