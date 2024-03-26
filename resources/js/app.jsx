// eslint-disable-next-line eslint-comments/disable-enable-pair
/* eslint-disable react/no-children-prop */
import React from "react";
import "./bootstrap";
import "../css/app.css";
import { createRoot } from "react-dom/client";
import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import DefaultLayout from "../js/Layouts/DefaultLayout";
import AuthenticatedLayout from "../js/Layouts/AuthenticatedLayout";
import { ErrorBoundary } from "react-error-boundary";

const appName = import.meta.env.VITE_APP_NAME || "Spark Mobility App";

createInertiaApp({
	title: (title) => `${title} - ${appName}`,
	resolve: async (name) => {
		const page = await resolvePageComponent(
			`./Pages/${name}.jsx`,
			import.meta.glob("./Pages/**/*.jsx")
		);
		if (!page) return null;

		const authPrefixes = [
			"Auth/Login",
			"Auth/Register",
			"Auth/ConfirmPassword",
			"Auth/ForgotPassword",
			"Auth/VerifyEmail",
		];
		const isAuthPage = authPrefixes.some((prefix) => name.startsWith(prefix));

		page.default.layout =
			name.startsWith("Welcome") || isAuthPage
				? (page) => <DefaultLayout children={page} />
				: (page) => <AuthenticatedLayout children={page} />;
		return page;
	},
	setup({ el, App, props }) {
		const root = createRoot(el);
		root.render(
			<ErrorBoundary
				fallback={
					<div className="flex w-full items-center justify-center">
						Something went wrong here.
					</div>
				}
			>
				<App {...props} />
			</ErrorBoundary>
		);
	},
	progress: { color: "#4B5563" },
});
